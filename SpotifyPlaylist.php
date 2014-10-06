<?php

	class SpotifyPlaylist {

		public $station;
		public $showid;


		//RSS feed of recently played tracks
		function __construct($station = null, $showid = null)
		{
			if(isset($_GET['station']))
			{
				$this->station = 'http://spinitron.com/radio/rss.php?station=' . $_GET['station'];
			}
			else
			{
				$this->station = 'http://spinitron.com/radio/rss.php?station=wzbc&showid=505';
			}
			$this->showid = $showid;
		}

		public function getFeed()
		{
			$content = simplexml_load_file($this->station);
			$content_array = array();

			$i = 0;
			$playlist_count = 0;
			$MAX_COUNT = 50;
			foreach($content->channel->item as $track)

			{
				//Limit playlist to 20 items
				if ($playlist_count >= 20 || $i > $MAX_COUNT) break;

				//formatting for spotify api lookup
				list($artist, $track) = split(':',$track->title);
				$html_insert = str_replace(array(' ', '&'), '+', $artist.$track);
				$lookup = 'http://ws.spotify.com/search/1/track?q=' . $html_insert;

				$song = $this->songInLibrary($lookup);

				//if track found, add to content_array and increment count
				if($song)
				{
					$content_array[] = substr($song->track['href'], 14);
					$playlist_count++;
				}
				$i++;
			}
			unset($i,$playlist_count);


			$longstring = implode(',', $content_array);
			return $longstring;
		}

		private function songInLibrary($lookup)
		{
			$song = simplexml_load_file($lookup);
			return $song;
		}


	}

	