12/02/16 Summary of project:

I finished the WordPress Inthenews web page and admin GUI and pushed to staging today. I decided against using my custom post type "Newscard" to avoid the site's URL on production being "getbabyscripts.com/inthenews/inthenews." Each news card is simply a normal post. The card template resides in home.php, where the WP loop begins. Also included in the template hierarchy are header.php, footer.php, and single.php, the latter allowing editor users to preview a news card.

I created custom fields where editor users can input values in the admin dashboard. The `meta_keys` and `meta_values` are saved to the SQL database within the postmeta table. I prefixed the database with "brx" so wp_brxpostmeta is the complete table name. 

In functions.php, I enqueued all assets including bootstrap.css, bootstrap.js, and inthenews.js (contains my jQuery that displays news cards based on which round button the user clicks/touches). I also wrote additional functions at the bottom of functions.php to hide or modify certain admin dashboard labels; for example, I replaced the label "Post" with "News Card" for a more intuitive user experience.

If you need to contact me about coding needs, please email lbrown@denotetoday.com. 