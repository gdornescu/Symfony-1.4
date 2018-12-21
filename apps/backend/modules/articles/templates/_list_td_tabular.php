<td class="sf_admin_text sf_admin_list_td_Id">
  <?php echo link_to($post->getId(), 'post_edit', $post) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Category">
  <?php echo $post->getCategory() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_sfGuardUser">
  <?php echo $post->getSfGuardUser()->getUsername() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Title">
  <?php echo $post->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Body">
  <?php echo $post->getBody() ?>
</td>
