<?php

class EventController extends Controller {

	public function index_show() {
		$event = new Event();
		$events = $event->get_all();

		View::render('home', $events);
	}

	public function add_show() {
		View::render('add');
	}

	public function add_save($params) {
		$event = new Event();
		$event->create([
			"name"  => $params['POST']['name'],
			"date"  => $params['POST']['date'],
			"time"  => $params['POST']['time'],
			"man"   => $params['POST']['man'],
			"place" => $params['POST']['place'],
		]);

		App::redirect('/');
	}

	public function edit_show($params) {
		$id = $params['GET']['id'];

		$eventObj = new Event();
		$event = $eventObj->get($id);

		View::render('edit', $event);
	}

	public function edit_save($params) {}

	public function del($params) {
		$id = $params['GET']['id'];

		$event = new Event();
		$event->del($id);

		App::redirect('/');
	}

}