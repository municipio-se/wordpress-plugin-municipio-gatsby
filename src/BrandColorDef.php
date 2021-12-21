<?php

namespace WPMunicipioGatsby;

use Symfony\Component\Yaml\Yaml;

class BrandColorDef {
  protected $data;

  public function __construct($yaml) {
    $this->data = Yaml::parse($yaml);
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
