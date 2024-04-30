<div class="modal fade" id="recipeModal" <?php echo $recipe['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="recipeModalLabel-<?php echo $recipe['id']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel-<?php echo $recipe['id']; ?>"><?php echo $recipe['title']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- You can include recipe details here -->
                Recipe details for recipe with ID: <?php echo $recipe['id']; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>