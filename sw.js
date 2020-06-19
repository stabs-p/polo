self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('v1').then(function(cache) {
      return cache.addAll([
        'offline.php',
        'scripts/newjavascript.js',
        '/scripts/w3.css',
        '/images/illpolo2007banner2.gif',
        '/images/GrollLogo1.jpg',
        '/images/Tread365logo1.jpg',
        '/images/tread18a.jpg',
        '/images/CandClogo1.jpg',
        '/images/GE1.jpg'
      ]);
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request).catch(function(error){console.error('[onfetch] Failed. Serving cached offline fallback ' + error);
          return caches.match('offline.php');})
    })
  );
});

