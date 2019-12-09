self.oninstall = function(){
    chaces.open('snakerooV1')
    .then(function(cache){
        cache.addAll([
            '/',
            'index.html'
        ])
        .then(function(){
            console.log('cached!');
        })
        .catch(function(err){
            console.log('error ', err)
        })
    })
}

self.onactivate = function(){
    console.log('cache activated');
}

self.onfetch = function(event){
    event.respondWith(
        caches.match(event.request)
        .then(function(response){
            if(response){
                return response;
            }else{
                return fetch(event.request);
            }
        })
    )
}