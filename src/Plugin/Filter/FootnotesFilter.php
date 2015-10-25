<?php

/**
 * @file
 * Contains \Drupal\footnotes\Plugin\Filter\FootnotesFilter.
 */

// Namespace for filter.
namespace Drupal\footnotes\Plugin\Filter;

// Base class for filters.
use Drupal\filter\Plugin\FilterBase;

/**
 * Provide a base filter for footnotes.
 * @Filter(
 *   id = "filter_footnotes",
 *   module = "footnotes",
 *   title = @Translation("Footnotes"),
 *   description = @Translation("Insert automatically numbered footnotes using &lt;fn&gt; or [fn] tags."),
 *   type = \Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE,
 *   cache = FALSE,
 *   settings = {
 *     "decode_entities" = FALSE
 *   },
 *   weight = 0
 * )
 */
class FootnotesFilter extends FilterBase{

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * Get the tips for the filter.
   *
   * @param bool $long
   *   If get the long or short tip.
   *
   * @return string
   *   The tip to show for the user.
   */
  public function tips($long = FALSE) {
    $output = t('You can insert footnotes directly into texts with <code>[fn]This text becomes a footnote.[/fn]</code>.
                 This will be replaced with a running number (the footnote reference) and the text within the [fn] tags
                 will be moved to the bottom of the page (the footnote). See @link for additional usage options.',
      //array('@link'=>'<a href="http://drupal.org/project/footnotes">' . t('Footnotes Readme page') . '</a>'));

    array('@link'=> \Drupal::l(t('Footnotes Readme page'))));
    return $output;
  }

  public function process($text, $langcode) {
    // TODO: Implement process() method.
  }


}