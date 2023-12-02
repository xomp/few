<?php

// namespace App;

class Event extends Model {

	private $table = 'events';

	private $fields = [ 'name', 'date', 'time', 'man', 'place' ];

	/*private $id;
	private $name;
	private $date;
	private $time;
	private $man;
	private $place;*/

	public function __construct() {
		/*if( !empty($event) ) {
			$this->$id    = $event['id'];
			$this->$name  = $event['name'];
			$this->$date  = $event['date'];
			$this->$time  = $event['time'];
			$this->$man   = $event['man'];
			$this->$place = $event['place'];
		}*/

		// parent::__construct();
	}

	public function get_all() {

		$table = $this->table;

		$data[$table] = json_decode(file_get_contents($this->table . '_obj.json'), true);
		dd($data[$table][1]);
		dd($data);
		return $data;
	}

	public function get($id) {

		$table = $this->table;

		$events = $this->get_all();
		$event = $events[$table][$id];
		return $event;
	}

	public function create($event) {

		$table = $this->table;

		$events = $this->get_all();
		$event['id'] = count($events[$table]);
		$events[$table][] = $event;
		$this->save($events);
	}

	public function update($id, $event) {}

	public function edit($id, $event) {

		$table = $this->table;

		$event = [
			"id"    => $event['id'],
			"name"  => $event['name'],
			"date"  => $event['date'],
			"time"  => $event['time'],
			"man"   => $event['man'],
			"place" => $event['place'],
		];

		$events = $this->get_all();
		$events[$table][$id] = $event;
		$this->save($events);

		App::redirect('/');

	}

	public function del($id) {

		$table = $this->table;

		$events = $this->get_all();
		unset($events[$table][$id]);
		$this->save($events);

	}

	public function save($events) {

		$table = $this->table;

		$events_json = json_encode($events[$table], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		file_put_contents($this->table . '_obj.json', $events_json);
	}

}