<?php

class StreamsObject
{
	protected $StreamsId;
	protected $ClusterId;
	
	function getStreamsId()
	{
		return $this->StreamsId;
	}
	
	function getClusterId()
	{
		return $this->ClusterId;
	}
}

class MeasureRecord
{
	protected $RecordId;
}

class Intersection extends StreamsObject
{
	private $Suburb;
	private $Description;
	private $Lat;
	private $Long;
	
	function __construct( $StreamsId, $ClusterId, $Suburb, $Description, $Lat, $Long )
	{
		$this->StreamsId = $StreamsId;
		$this->ClusterId = $ClusterId;
		$this->Suburb = $Suburb;
		$this->Description = $Description;
		$this->Lat = $Lat;
		$this->Long = $Long;
	}
	
	function getLatLong()
	{
		return sprintf( "%.6f,%.6f", $this->Lat, $this->Long );
	}
	
	function getArray()
	{
		return array(
			"StreamsId" => $this->StreamsId,
			"ClusterId" => $this->ClusterId,
			"Suburb" => $this->Suburb,
			"Description" => $this->Description,
			"Lat" => $this->Lat,
			"Long" => $this->Long );
	}
}

class CSV
{
	private $filename;
	private $data;		//raw
	private $records = array();
	private $length;

	function readfile( $filename )
	{
		$this->filename = $filename;
		
		$data = file_get_contents( $filename );
		if ( $data === "0" )
		{
			$this->records = null;
			$this->length = 0;
		}
		else
		{
			$data = explode( "\r\n", $data );
			$this->length = intval( $data[0] );
			for ( $i = 1; $i< ($this->length+1); $i++ )
			{
				//printf( "%s\n", $data[$i] );
				$this->records[] = explode(",", $data[ $i ] );
			}
		}
	}
	
	function getRecords()
	{
		return $this->records;
	}
}

/*
$IntersectionsCSV = new CSV();
$IntersectionsCSV->readfile( "Intersections.aspx" );
$Intersections = array();

foreach ( $IntersectionsCSV->getRecords() as $record )
{
	$Intersections[] = new Intersection( $record[0], $record[1], $record[2], $record[3], $record[4], $record[5] );
}

function f($int) { return $int->getArray(); };
echo json_encode( array_map( "f", $Intersections ) );
//file_put_contents( "intersections.js", sprintf( "intersections = %s",  ) );*/


