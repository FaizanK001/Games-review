var app = new Vue({
    // Add the id here.
    el: '#app',
    data: {
        // Create your data here.
        heading:'Vue js is working'
   

    },
    methods: {
        //    Add your methods here.   
        returnComments: function(){
            $.get('http://localhost:82/games-review/index.php/home/allComments/1', function(data){
for(let i=0; i<data.length; i++){
body.listOfComments.push(data[i])
}

            });
            }
    
    },
    postComments:function(){
        var ID= $("#ID").text();
        var postData= {
            'UserComment':$('#commentInput').val()
        }
        $.post('http://localhost:82/games-review/index.php/home/writecomments/${ID}',postData)
        body.listOfComments.push(postData);
        this.listOfComments=[];
        setTimeout(this.returnComments,150);
    }
});