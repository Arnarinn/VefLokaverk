<?php
class Anime extends Eloquent{
	protected $table = "anime";

	public function episodes(){

		return $this->hasMany('Episode');
	}
}
