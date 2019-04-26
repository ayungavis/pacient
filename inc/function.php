<?php session_start();

	/**
	 *	Officially created by
	 * 	Tranity Project
	 * 	---------------------
	 * 	
	 *	For more information:
	 *	+62 857 3240 5860 (WhatsApp)
	 * 	http://udah.pw/ayung
	 */

	require_once(__DIR__ . '/db.class.php');
	require_once('config.php');

	/**
	 *	Get date now
	 *	To get the date time from corresponding timezone
	 *
	 */
	function get_date()
	{
		$date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
		return $date->format('Y-m-d H:i:s');
	}

	/**
	 *	Get age
	 *	To get the age from pasient
	 *
	 */
	function age($date) {
		$dob 	= new DateTime($date);
		$today	= new DateTime('today');

		$result	= $today->diff($dob)->y;
		return $result;
	}

	/**
	 *	Month
	 *	To show month format from database which the format is timestamp
	 *
	 *	@param 		integer 		month
	 *
	 */
	function month($int) {
		$month = array(
        	" ", 
        	"Januari", 
        	"Februari", 
        	"Maret", 
        	"April", 
        	"Mei", 
        	"Juni", 
        	"Juli", 
        	"Agustus", 
        	"September", 
        	"Oktober", 
        	"November", 
        	"Desember"
        );

        $result = $month[$int];
        return $result;
	}

	/**
	 *	Show date
	 *	To show date format from database which the format is timestamp
	 *
	 *	@param 		string 		date
	 *
	 */
	function show_date($str) {
        $y = explode(' ', $str);
        $x = explode('-', $y[0]);
        $date = "";    
        $m = (int)$x[1];
        $m = month($m);
        $st = array(1, 21, 31);
        $nd = array(2, 22);
        $rd = array(3, 23);

        if(in_array( $x[2], $st)) {
                $date = $x[2].'st';
        }
        else if(in_array( $x[2], $nd)) {
                $date .= $x[2].'nd';
        }
        else if(in_array( $x[2], $rd)) {
                $date .= $x[2].'rd';
        }
        else {
                $date .= $x[2].'th';
        }
		// $date .= ' ' . $m . ' ' . $x[0];
        $date = $x[2]. ' ' . $m . ' ' . $x[0];

        return $date;
	}

	/**
	 *	Show datetime
	 *	To show date and time format from database which the format is timestamp
	 *
	 *	@param 		string 		date
	 *
	 */
	function show_datetime($str) {
		// Date
        $y = explode(' ', $str);
        $x = explode('-', $y[0]);
        $date = "";    
        $m = (int)$x[1];
        $m = month($m);

        // Time
        $time = explode(':', $y[1]);

		// $date .= ' ' . $m . ' ' . $x[0];
        $date = $x[2]. ' ' . $m . ' ' . $x[0] . ' ' . $time[0] . ':' . $time[1];

        return $date;
	}

?>