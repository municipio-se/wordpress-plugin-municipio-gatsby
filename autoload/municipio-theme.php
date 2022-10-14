<?php

/**
 * Disables the error message about missing color scheme
 */
add_filter(
  "Municipio/Helper/Styleguide/_getTheme/triggerColorSchemeError",
  "__return_false"
);
