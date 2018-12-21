<td colspan="2">
  <?php echo __('%%name%% - %%slug%%', array('%%name%%' => link_to($category->getName(), 'category_edit', $category), '%%slug%%' => $category->getSlug()), 'messages') ?>
</td>
