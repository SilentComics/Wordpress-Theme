jQuery(document).ready(function(){var e=jQuery("#comments");e.length&&(jQuery(e).hide(),jQuery("<button/>").attr("class","toggle-comments").attr("href","#respond").text("Join the discussion").insertBefore(e),jQuery(".toggle-comments").wrap(jQuery("<div/>",{id:"toggle-comments-container"})),jQuery(".toggle-comments").on("click",function(t){t.preventDefault(),jQuery(e).toggle("slow",function(){var e=jQuery(".toggle-comments"),t="Hide Comments"===e.html()?"Show Comments":"Hide Comments";jQuery(e).text(t)})}))});