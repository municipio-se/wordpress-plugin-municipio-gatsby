<?php

function municipio_gatsby_feature_enabled($feature, $default = false) {
  $constant = "MUNICIPIO_GATSBY_ENABLE_" . strtoupper($feature);
  if (defined($constant)) {
    $value = constant($constant);
    if (!is_null($value)) {
      return (bool) $value;
    }
  }
  return get_option("municipio_gatsby_feature_" . $feature, $default);
}
