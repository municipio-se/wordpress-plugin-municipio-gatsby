<?php

namespace WPMunicipioGatsby;

use Symfony\Component\Yaml\Yaml;

class BrandColorDef {
  protected $data;

  public function __construct($yaml) {
    $yaml = preg_replace('/(?<!")#[0-9a-fA-F]{3,8}\b(?!")/', '"$0"', $yaml);
    try {
      $this->data = Yaml::parse($yaml);
    } catch (\Exception $error) {
    }
    if (empty($this->data)) {
      $this->data = [];
    }
  }

  public function getNormalized() {
    $colors = [];
    foreach ($this->data as $key => $value) {
      if (is_null($value)) {
        $value = "";
      }
      if (is_scalar($value)) {
        $value = ["value" => $value];
      }
      $label = $value["label"] ?? ($value["name"] ?? $key);
      $value = array_merge(["label" => $label, "key" => $key], $value);
      $colors[$key] = $value;
    }
    return $colors;
  }

  public function getColorOptions() {
    return array_column($this->getNormalized(), "label", "key");
  }
}
