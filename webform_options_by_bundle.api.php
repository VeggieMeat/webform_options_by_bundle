<?php

/**
 * @file
 * This file contains no working PHP code; it exists to provide additional
 * documentation for doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * Allows modules to decide whether or not entities should be listed.
 *
 * @param array $entity_info
 *   Entity information provided by the Entity API. This is passed to you so
 *   you don't have to load it.
 * @param object $entity
 *   The entity object.
 * @param string $entity_type
 *   The entity type.
 * @param string $bundle
 *   The bundle of the entity.
 *
 * @return bool
 *   Return TRUE to grant access, FALSE to deny access.
 */
function hook_webform_options_by_bundle_check_access($entity_info, $entity, $entity_type) {
  // Always allow listing of entities of type 'my_custom_entity' even if the
  // user does not have permission to view.
  if ($entity_type == 'my_custom_entity') {
    return TRUE;
  }
  // Deny access to any entity with the name/label 'Terminator', regardless of
  // entity type.
  if ($entity->$entity_info['entity keys']['label'] == 'Terminator') {
    return FALSE;
  }
}
