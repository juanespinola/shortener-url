<div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 " >
    <p class="text-lg font-bold mb-4">Login User and Get Bearer Token</p>
    <pre><code class="language-js">fetch('{{ url('api') }}/login', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      email: 'useremail',
      password: 'userspass',
    }),
.then(res => res.json())
.then(console.log);</code></pre>
    <button type="button" @click="output = '1'"  class="btn bg-primary border border-primary rounded-md text-white transition-all duration-300 hover:bg-primary/[0.85] hover:border-primary/[0.85]">Show Output</button>

    <div x-show="output === '1'">
                        <pre><code class="language-js">{
    "user": {
        "id": 1,
        "name": "My User",
        "email": "user@email.com",
        "email_verified_at": null,
        "created_at": "2024-11-14T20:44:14.000000Z",
        "updated_at": "2024-11-19T14:32:09.000000Z"
    },
    "token": "4|Y37WlbFbViBloQMV05LgETYO..."
}</code></pre>
    </div>
</div>
