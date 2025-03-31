<?php

require_once 'app/models/Model.php';
require_once 'app/models/Post.php';

use app\models\Post;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['api'])) {
    $postModel = new Post();

    if ($_GET['api'] === 'posts') {
        echo json_encode($postModel->getAllPosts());
        exit;
    }

    if ($_GET['api'] === 'post' && isset($_GET['id'])) {
        echo json_encode($postModel->getPostById($_GET['id']));
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['api'])) {
    $postModel = new Post();
    $input = json_decode(file_get_contents('php://input'), true);

    if ($_GET['api'] === 'create') {
        echo json_encode($postModel->savePost($input));
        exit;
    }

    if ($_GET['api'] === 'update') {
        echo json_encode($postModel->updatePost($input));
        exit;
    }

    if ($_GET['api'] === 'delete') {
        echo json_encode($postModel->deletePost($input));
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1>Posts</h1>
    <form id="postForm">
        <input type="hidden" id="postId">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <hr>
    <h2>All Posts</h2>
    <div id="postsContainer" class="mt-3"></div>
</div>

<script>
    const form = document.getElementById('postForm');
    const titleInput = document.getElementById('title');
    const contentInput = document.getElementById('content');
    const postIdInput = document.getElementById('postId');
    const postsContainer = document.getElementById('postsContainer');

    async function fetchPosts() {
        const res = await fetch('?api=posts');
        const posts = await res.json();
        renderPosts(posts);
    }

    function renderPosts(posts) {
        postsContainer.innerHTML = posts.map(post => `
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">${post.title}</h5>
                    <p class="card-text">${post.content}</p>
                    <button class="btn btn-sm btn-warning" onclick='editPost(${JSON.stringify(post)})'>Edit</button>
                    <button class="btn btn-sm btn-danger" onclick='deletePost(${post.id})'>Delete</button>
                </div>
            </div>
        `).join('');
    }

    function editPost(post) {
        postIdInput.value = post.id;
        titleInput.value = post.title;
        contentInput.value = post.content;
    }

    async function deletePost(id) {
        await fetch('?api=delete', {
            method: 'POST',
            body: JSON.stringify({ id }),
            headers: { 'Content-Type': 'application/json' }
        });
        fetchPosts();
    }

    form.addEventListener('submit', async e => {
        e.preventDefault();
        const post = {
            title: titleInput.value,
            content: contentInput.value
        };

        if (postIdInput.value) {
            post.id = postIdInput.value;
            await fetch('?api=update', {
                method: 'POST',
                body: JSON.stringify(post),
                headers: { 'Content-Type': 'application/json' }
            });
        } else {
            await fetch('?api=create', {
                method: 'POST',
                body: JSON.stringify(post),
                headers: { 'Content-Type': 'application/json' }
            });
        }

        form.reset();
        fetchPosts();
    });

    fetchPosts();
</script>
</body>
</html>