function callbackkiller_config_form($form, &$form_state) {
  $form = array();
 
  $form['cf_node_count'] = array(
    '#type' => 'textfield',
    '#title' => t('Count of nodes'),
    '#default_value' => variable_get('cf_node_count', 3),
    '#required' => TRUE,
  );
 
  $form['cf_node_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Node types'),
    '#options' => node_type_get_names(),
    '#default_value' => variable_get('cf_node_types', array()),
  );
 
  return system_settings_form($form);
}