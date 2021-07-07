function changewidth(id) {

            var serch_option1 = document.getElementById("main_List" + id);
            // console.log(serch_option1)

            var view1 = document.getElementById("view_more" + id);
            // console.log(view1)

            if (view1.value == 'true') {
                serch_option1.style.transition = "300ms";
                serch_option1.style.height = "auto";
                view1.value = 'false';


            } else if (view1.value == 'false') {
                // console.log('false')
                view1.value = 'true';

                serch_option1.style.transition = "300ms";
                serch_option1.style.height = "220px";
            }
            // console.log(id)

}


