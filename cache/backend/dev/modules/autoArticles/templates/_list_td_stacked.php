<td colspan="5">
  <?php echo __('%%Id%% - %%Category%% - %%sfGuardUser%% - %%Title%% - %%Body%%', array('%%Id%%' => link_to($post->getId(), 'post_edit', $post), '%%Category%%' => $post->getCategory(), '%%sfGuardUser%%' => $post->getSfGuardUser(), '%%Title%%' => $post->getTitle(), '%%Body%%' => $post->getBody()), 'messages') ?>
</td>
