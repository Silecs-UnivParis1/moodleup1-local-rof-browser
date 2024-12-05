<?php
require_once('../../config.php');
require_once('libbrowser.php');

// limite cette page au compte admin
require_login();

$systemcontext   = context_system::instance();
$PAGE->set_context($systemcontext);
has_capability('enrol/cohort:unenrol', $systemcontext);

$PAGE->set_url('/local/rof_browser/rof_browser.php');
$PAGE->set_title('Components browser');

$PAGE->requires->js(new moodle_url('/local/jquery/jquery.js'), true);
$PAGE->requires->js(new moodle_url('/local/rof_browser/browser.js'), true);

$PAGE->requires->css(new moodle_url('/local/rof_browser/browser.css'));


echo $OUTPUT->header();

echo '<div id="arbreprog" class="detail-tree"></div>';

echo '<div class="component-tree">';

echo treeComponent();


echo '</div>';

echo $OUTPUT->footer();
