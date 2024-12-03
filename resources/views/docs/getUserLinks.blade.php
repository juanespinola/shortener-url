<div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 " >
    <p class="text-lg font-bold mb-4">Get User Links</p>
    <pre><code class="language-js">fetch('{{ url('api') }}/getUserLinks', {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer /* YOUR_ACCESS_TOKEN_HERE */', // Pass BearerToken via Authorization header
    },
.then(res => res.json())
.then(console.log);</code></pre>
    <button type="button" @click="output = '2'"  class="btn bg-primary border border-primary rounded-md text-white transition-all duration-300 hover:bg-primary/[0.85] hover:border-primary/[0.85]">Show Output</button>

    <div x-show="output === '2'">
                        <pre><code class="language-js">{
   "links": [
        {
            "id": 365,
            "original_url": "http://urloriginal.com",
            "short_code": "ABC123",
            "expires_at": null, // by default expired in 48 hs.
            "user_id": 99,
            "created_at": "2024-08-15T12:12:40.000000Z",
            "updated_at": "2024-08-15T12:12:40.000000Z"
        },
        {...},
        {...},
    ]
}</code></pre>
    </div>
</div>
