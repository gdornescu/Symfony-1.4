<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($post->getId(), 'post_edit', $post) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo $post->getCategoryId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_user_id">
  <?php echo $post->getUserId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $post->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_body">
  <?php echo $post->getBody() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_image">
  <?php echo $post->getImage() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($post->getCreatedAt()) ? format_date($post->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($post->getUpdatedAt()) ? format_date($post->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
