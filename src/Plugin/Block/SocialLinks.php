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
    $build = [];
    $build['social_links_facebook']['#markup'] = '<div class="icon icon-facebook">
    <a href="' . $this->configuration['facebook'] . '" target="_blank" title="">'.t('Facebook').'</a>
    </div>';
    $build['social_links_twitter']['#markup'] = '<div class="icon icon-twitter">
    <a href="' . $this->configuration['twitter'] . '" target="_blank" title="">'.t('Twitter').'</a>
    </div>';
    $build['social_links_instagram']['#markup'] = '<div class="icon icon-instagram">
    <a href="' . $this->configuration['instagram'] . '" target="_blank" title="">'.t('Instagram').'</a>
    </div>';
    $build['social_links_google_plus']['#markup'] = '<div class="icon icon-google">
    <a href="' . $this->configuration['google_plus'] . '" target="_blank" title="">'.t('Google+').'</a>
    </div>';
    $build['social_links_linkedin']['#markup'] = '<div class="icon icon-linkedin">
    <a href="' . $this->configuration['linkedin'] . '" target="_blank" title="">'.t('LinkedIn').'</a>
    </div>';
    $build['social_links_pinterest']['#markup'] = '<div class="icon icon-pinterest">
    <a href="' . $this->configuration['pinterest'] . '" target="_blank" title="">'.t('Pinterest').'</a>
    </div>';
    $build['social_links_youtube']['#markup'] = '<div class="icon icon-youtube">
    <a href="' . $this->configuration['youtube'] . '" target="_blank" title="">'.t('YouTube').'</a>
    </div>';
    $build['social_links_vimeo']['#markup'] = '<div class="icon icon-vimeo">
    <a href="' . $this->configuration['vimeo'] . '" target="_blank" title="">'.t('Vimeo').'</a>
    </div>';
    return $build;
  }

}
