<?php
$jobs =   Job::where('user_id',Auth::user()->id)->paginate(6);