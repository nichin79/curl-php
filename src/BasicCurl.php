<?php
namespace Nichin79\Curl;

class BasicCurl extends Curl
{
  public function __construct(array $data = [])
  {
    parent::__construct($data);

    curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);

    parent::exec();
  }
}