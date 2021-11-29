<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
<?php foreach ($news as $news_item): ?>
  <tbody>
    <tr>
      <th><?php echo $news_item['title']; ?></th>
      <td><?php echo $news_item['text']; ?></td>
      <td><a href="<?php echo site_url('question/'.$news_item['slug']); ?>">View article</a></td>
    </tr>
  </tbody>  
<?php endforeach; ?>
</table>
