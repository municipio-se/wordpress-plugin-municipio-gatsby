<?php

namespace WPMunicipioGatsby;

use Symfony\Component\Yaml\Yaml;
use Jawira\CaseConverter\Convert;

class BrandColorDef {
  protected $data;

  public function __construct($yaml) {
    $this->data = Yaml::parse($yaml);
  }

  public function getNormalized() {
    $colors = [];
    foreach ($this->data as $key => $value) {
      if (is_scalar($value)) {
        $value = ["value" => $value];
      }
      $label = $value["label"] ?? ($value["name"] ?? $key);
      $name = $value["name"] ?? (new Convert($value["label"]))->toKebab();
      $value = array_merge(
        ["name" => $name, "label" => $label, "key" => $key],
        $value
      );
      $colors[$key] = $value;
    }
    return $colors;
  }

  public function getColorOptions() {
    return array_column($this->getNormalized(), "label", "key");
  }
}
