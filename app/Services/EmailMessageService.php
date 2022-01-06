<?php

namespace App\Services;

use Carbon\Carbon;
use PhpMimeMailParser\Parser;
use App\Models\Email;

class EmailMessageService
{
	public function import(Array $files)
	{
		$parser = new Parser();
		$success_count = 0;

		foreach ($files as $file) {
			if (file_exists($file)) {
				$parser->setPath($file);

				$email = new Email();

				// not sure if this was intended, but one of the .msg files is missing the 'day-of-week' from its date.
				// this is a workaround to handle it just in case, otherwise I'd go straight to a Carbon instance like so
				// $email->date = Carbon::createFromFormat("D, d M Y H:i:s O", $parser->getHeader('date'));

				// extract timezone offset, since date() doesn't seem to handle it
				// we'll add it in with Carbon
				$date = $parser->getHeader('date');
				$date = explode(' ', $date);
				$timezone = end($date);
				$date = array_slice($date, 0, -1);
				$date = implode($date);

				$date = date('D, d M Y H:i:s', strtotime($date));
				$email->date = Carbon::createFromFormat("D, d M Y H:i:s", $date);
				$email->date->setTimezone($timezone);

				$email->timezone = $timezone;
				$email->to = trim($parser->getHeader('to'), '<>');
				$email->from = trim($parser->getHeader('from'), '<>');
				$email->subject = $parser->getHeader('subject');
				$email->message_id = trim($parser->getHeader('message-id'), '<>');

				$email->save();
				$success_count++;
			}
		}

		echo "Imported $success_count messages out of " . count($files) . " total messages found.\n";
	}
}
