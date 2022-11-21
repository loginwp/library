<?php
/**
 * Process core plugin conditions first before those from integrations
 */
add_filter('loginwp_is_run_core_rules_before_others', '__return_true');
