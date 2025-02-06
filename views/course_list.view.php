<?php require base_path("views/partials/header.view.php")?>

<?php if($courses):?>

<section id="list" class="list">
    <header class="list__row list__header">
        <h1>
            Course List
        </h1>
    </header>

    <?php foreach ($courses as $course):?>
    <div class="list__row">
        <div class="list__item">
            <p class="bold"><?php echo $course['name']?></p>
        </div>
        <div class="list__removeItem">
            <form action="/" method="post">
                <input type="hidden" name="action" value="delete_course">
                <input type="hidden" name="course_id" value="<?php echo $course['id']?>">
                <button class="remove-button">❌</button>
            </form>
        </div>
    </div>
    <?php endforeach;?>
</section>

<?php else:?>
<p>No categories exist yet.</p>
<?php endif;?>

<section id="add" class="add">
    <h2>Add Course</h2>
    <form action="/" method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_course">
        <div class="add__inputs">
            <label>Name:</label>
            <input type="text" name="course_name" maxlength="20" placeholder="Course Name" autofocus required>
        </div>
        <div class="add__addItem">
            <button class="add-button bold">Add</button>
        </div>
    </form>
</section>

<br>
<p><a href="/">View&amp; Add Assignments</a></p>

<?php require base_path("views/partials/footer.view.php")?>

