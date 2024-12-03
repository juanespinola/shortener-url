<div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 " >
    <p class="text-lg font-bold mb-4">Get User</p>
    <pre><code class="language-js">fetch('{{ url('api') }}/user', {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer /* YOUR_ACCESS_TOKEN_HERE */', // Pass BearerToken via Authorization header
    },
.then(res => res.json())
.then(console.log);</code></pre>
    <button type="button" @click="output = '5'"  class="btn bg-primary border border-primary rounded-md text-white transition-all duration-300 hover:bg-primary/[0.85] hover:border-primary/[0.85]">Show Output</button>

    <div x-show="output === '5'">
                        <pre><code class="language-js">{
    "id": 1,
    "name": "My User",
    "email": "user@email.com",
    "email_verified_at": null,
    "created_at": "2024-11-14T20:44:14.000000Z",
    "updated_at": "2024-11-19T14:32:09.000000Z"
}</code></pre>
    </div>
</div>
