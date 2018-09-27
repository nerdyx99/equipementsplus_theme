<?php

function ep_preprocess(&$variables, $hook){
  $variables['base_path'] = base_path();
  $variables['path_to_ep'] = drupal_get_path('theme', 'ep');
}

function ep_preprocess_node(&$variables) {
    if ($variables['view_mode'] === "teaser" && $variables['type'] === 'new_equipments') {
        $variables['content']['company_logo'] = file_create_url($variables['field_image'][0]['uri']);
        $variables['content']['company_tag_line'] = "represents these brands:";
        if ($variables['language'] === 'fr') {
            $variables['content']['company_tag_line'] = "répresente ces compagnies :";
        }
        foreach ($variables['field_new_company'] as $company) {
            $company_id = $company['value'];
            $company_object = entity_load('field_collection_item', array($company_id));
            foreach ($company_object as $object) {
                $variables['content']['company'][] = array(
                    'url' => $object->field_website_url[LANGUAGE_NONE][0]['url'],
                    'image' => file_create_url($object->field_image[LANGUAGE_NONE][0]['uri']),
                );
            }
        }
    }
}


/**
 * Implements template_preprocess_html().
 *
 */
function ep_preprocess_html(&$variables) {
    // Add conditional CSS for IE. To use uncomment below and add IE css file
    drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:400,700,300', array('type' => 'external'));
    drupal_add_js('http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyDyUvQN3js16zW1kWIDOvbnRwJs6OEBhJ4');
}

/**
 * Implements template_preprocess_page
 *
 */
function ep_preprocess_page(&$variables) {
  $variables['base_path'] = base_path();
  $variables['path_to_ep'] = drupal_get_path('theme', 'ep');
}

function ep_form_contact_site_form_alter(&$form, &$form_state) {
  // Change labels for the 'mail' and 'name' elements.
  $form['#prefix'] = '<div class="row">';
  $form['#suffix'] = '</div>';
  $form['name']['#prefix'] = '<div class="medium-6 columns">';
  $form['actions']['submit']['#suffix'] = '</div><div class="medium-6 columns"><div id="map"></div></div>';
}

function ep_preprocess_views_view_unformatted(&$variables) {
    foreach ($variables['classes_array'] as $key => $classes) {
        $variables['classes_array'][$key] .= " small-4 large-4 columns";
    }
}
