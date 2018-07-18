<?php

namespace Drupal\simple_social_links\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'SocialLinks' block.
 *
 * @Block(
 *  id = "social_links",
 *  admin_label = @Translation("Social links"),
 * )
 */
class SocialLinks extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['facebook'] = array(
      '#type' => 'url',
      '#title' => $this->t('Facebook'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['facebook']) ? $this->configuration['facebook'] : 'https://facebook.com/',
      '#weight' => '0',
    );
    $form['twitter'] = array(
      '#type' => 'url',
      '#title' => $this->t('Twitter'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['twitter']) ? $this->configuration['twitter'] : 'https://twitter.com/',
      '#weight' => '0',
    );
    $form['instagram'] = array(
      '#type' => 'url',
      '#title' => $this->t('Instagram'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['instagram']) ? $this->configuration['instagram'] : 'https://instagram.com/',
      '#weight' => '0',
    );
    $form['google_plus'] = array(
      '#type' => 'url',
      '#title' => $this->t('Google Plus'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['google_plus']) ? $this->configuration['google_plus'] : 'https://google.com/plus',
      '#weight' => '0',
    );
    $form['linkedin'] = array(
      '#type' => 'url',
      '#title' => $this->t('LinkedIn'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['linkedin']) ? $this->configuration['linkedin'] : 'https://linkedin.com/',
      '#weight' => '0',
    );
    $form['pinterest'] = array(
      '#type' => 'url',
      '#title' => $this->t('Pinterest'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['pinterest']) ? $this->configuration['pinterest'] : 'https://pinterest.com/',
      '#weight' => '0',
    );
    $form['youtube'] = array(
      '#type' => 'url',
      '#title' => $this->t('YouTube'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['youtube']) ? $this->configuration['youtube'] : 'https://youtube.com/',
      '#weight' => '0',
    );
    $form['vimeo'] = array(
      '#type' => 'url',
      '#title' => $this->t('Vimeo'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['vimeo']) ? $this->configuration['vimeo'] : 'https://vimeo.com/',
      '#weight' => '0',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['facebook'] = $form_state->getValue('facebook');
    $this->configuration['twitter'] = $form_state->getValue('twitter');
    $this->configuration['instagram'] = $form_state->getValue('instagram');
    $this->configuration['google_plus'] = $form_state->getValue('google_plus');
    $this->configuration['linkedin'] = $form_state->getValue('linkedin');
    $this->configuration['pinterest'] = $form_state->getValue('pinterest');
    $this->configuration['youtube'] = $form_state->getValue('youtube');
    $this->configuration['vimeo'] = $form_state->getValue('vimeo');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
        '#theme' => 'simple_social',
        '#title' => $this->configuration['title'],
        '#social' => [
            'facebook' => $this->configuration['facebook'],
            'twitter' =>$this->configuration['twitter'],
            'instagram' =>$this->configuration['instagram'],
            'google_plus' =>$this->configuration['google_plus'],
            'linkedin' =>$this->configuration['linkedin'],
            'pinterest' =>$this->configuration['pinterest'],
            'youtube' =>$this->configuration['youtube'],
            'vimeo' =>$this->configuration['vimeo'],
        ],
    ];

    return $build;
  }

}
