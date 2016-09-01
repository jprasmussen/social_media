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
      '#default_value' => isset($this->configuration['facebook']) ? $this->configuration['facebook'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://facebook.com/',
    );
    $form['twitter'] = array(
      '#type' => 'url',
      '#title' => $this->t('Twitter'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['twitter']) ? $this->configuration['twitter'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://twitter.com/',
    );
    $form['instagram'] = array(
      '#type' => 'url',
      '#title' => $this->t('Instagram'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['instagram']) ? $this->configuration['instagram'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://instagram.com/',
    );
    $form['google_plus'] = array(
      '#type' => 'url',
      '#title' => $this->t('Google Plus'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['google_plus']) ? $this->configuration['google_plus'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://google.com/plus',
    );
    $form['linkedin'] = array(
      '#type' => 'url',
      '#title' => $this->t('LinkedIn'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['linkedin']) ? $this->configuration['linkedin'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://linkedin.com/',
    );
    $form['pinterest'] = array(
      '#type' => 'url',
      '#title' => $this->t('Pinterest'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['pinterest']) ? $this->configuration['pinterest'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://pinterest.com/',
    );
    $form['youtube'] = array(
      '#type' => 'url',
      '#title' => $this->t('YouTube'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['youtube']) ? $this->configuration['youtube'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://youtube.com/',
    );
    $form['vimeo'] = array(
      '#type' => 'url',
      '#title' => $this->t('Vimeo'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['vimeo']) ? $this->configuration['vimeo'] : '',
      '#weight' => '0',
      '#placeholder' => 'https://vimeo.com/',
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
    $build = [];
    $build['social_links_facebook']['#markup'] = !empty($this->configuration['facebook']) ? '<div class="icon icon-facebook">
    <a href="' . $this->configuration['facebook'] . '" target="_blank" title="">'.t('Facebook').'</a>
    </div>' : '';
    $build['social_links_twitter']['#markup'] = !empty($this->configuration['twitter']) ? '<div class="icon icon-twitter">
    <a href="' . $this->configuration['twitter'] . '" target="_blank" title="">'.t('Twitter').'</a>
    </div>' : '';
    $build['social_links_instagram']['#markup'] = !empty($this->configuration['instagram']) ? '<div class="icon icon-instagram">
    <a href="' . $this->configuration['instagram'] . '" target="_blank" title="">'.t('Instagram').'</a>
    </div>' : '';
    $build['social_links_google_plus']['#markup'] = !empty($this->configuration['google_plus']) ? '<div class="icon icon-google">
    <a href="' . $this->configuration['google_plus'] . '" target="_blank" title="">'.t('Google+').'</a>
    </div>' : '';
    $build['social_links_linkedin']['#markup'] = !empty($this->configuration['linkedin']) ? '<div class="icon icon-linkedin">
    <a href="' . $this->configuration['linkedin'] . '" target="_blank" title="">'.t('LinkedIn').'</a>
    </div>' : '';
    $build['social_links_pinterest']['#markup'] = !empty($this->configuration['pinterest']) ? '<div class="icon icon-pinterest">
    <a href="' . $this->configuration['pinterest'] . '" target="_blank" title="">'.t('Pinterest').'</a>
    </div>' : '';
    $build['social_links_youtube']['#markup'] = !empty($this->configuration['youtube']) ? '<div class="icon icon-youtube">
    <a href="' . $this->configuration['youtube'] . '" target="_blank" title="">'.t('YouTube').'</a>
    </div>' : '';
    $build['social_links_vimeo']['#markup'] = !empty($this->configuration['vimeo']) ? '<div class="icon icon-vimeo">
    <a href="' . $this->configuration['vimeo'] . '" target="_blank" title="">'.t('Vimeo').'</a>
    </div>' : '';
    return $build;
  }

}
