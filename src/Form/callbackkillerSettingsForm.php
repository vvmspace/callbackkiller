<?php
namespace Drupal\callbackkiller\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class callbackkillerSettingsForm extends ConfigFormBase {
  /** 
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'callbackkiller_admin_settings';
  }

  /** 
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'callbackkiller.settings',
    ];
  }

  /** 
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('callbackkiller.settings');

    $form['callbackkiller_code'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Code'),
      '#default_value' => $config->get('callbackkiller_code'),
    );  

    return parent::buildForm($form, $form_state);
  }

  /** 
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration
    $this->config('callbackkiller.settings')
      ->set('callbackkiller_code', $form_state->getValue('callbackkiller_code'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}