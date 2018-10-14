<?php

class User {
  public $oauth_token;
  public $id;
  public $email;

  function __construct($token, $id, $email) {
    $this->$oauth_token = $token;
    $this->$id = $id;
    $this->$email = $email;
  }

  function rawOAuthToken() {
    return $this->$oauth_token;
  }

  function filteredOAuthToken() {
    return substr($this->$oauth_token, 0, 6) . "...";
  }
}

