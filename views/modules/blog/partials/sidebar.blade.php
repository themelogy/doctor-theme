@blogCategories('categories')
@blogLatestPosts(3, 'sidebar-latest')
@isset($post)
    @blogTags($post, 5)
@endisset
@isset($posts)
    @blogTags($posts, 2)
@endisset