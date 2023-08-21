jQuery(document).ready(function($) {
    $.ajax({
        url: ajax_object.ajax_url,
        type: 'POST',
        data: {
            action: 'custom_get_projects'
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                var projects = response.data;

                // Process and display the projects as needed
                for (var i = 0; i < projects.length; i++) {
                    var project = projects[i];
                    // Do something with project.id, project.title, project.link
                }
            }
        }
    });
});
