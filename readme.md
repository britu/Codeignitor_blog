###uplaod file Default syntax put config option

$config['upload_path'] = './assets/images/posts';


###form image name must be userfile
<div class="form-group">
 	 	<label for="image">Upload Image</label>
 	 	<input type="file" name="userfile" size="20" class="form-control">
 	 </div>



###trunk the word
	autoload helper ('text')
	 - function called word_limiter('parameters', 50);

###to get permission for file
	- go to command controll and
		sudo chmod 777 htdocs/CI_collection/ci_blog/assets/images/posts
###Database syntax
CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

and

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
