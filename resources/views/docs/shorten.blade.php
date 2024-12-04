<div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 " >
    <p class="text-lg font-bold mb-4">Short your Link</p>
    <pre><code class="language-js">fetch('{{ url('api') }}/shorten', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        // Bearer token is OPTIONAL, If you are Authenticate save you ID,
        'Authorization': 'Bearer /* YOUR_ACCESS_TOKEN_HERE */', // Pass BearerToken via Authorization header
    },
    body: JSON.stringify({
        "original_url" : "https://www.youtube.com/",
        "expired_at": "" // false or null
    })
.then(res => res.json())
.then(console.log);</code></pre>
    <button type="button" @click="output = '7'"  class="btn bg-primary border border-primary rounded-md text-white transition-all duration-300 hover:bg-primary/[0.85] hover:border-primary/[0.85]">Show Output</button>

    <div x-show="output === '7'">
                        <pre><code class="language-js">{
    "Messages": "Create Correct URL",
    "shortCode": "{{ url('api') }}/ABC123"
}</code></pre>
    </div>
</div>
