<div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 " >
    <p class="text-lg font-bold mb-4">Get User Link Tracking By Code</p>
    <pre><code class="language-js">fetch('{{ url('api') }}/getUserLinkTrackingByCode', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer /* YOUR_ACCESS_TOKEN_HERE */', // Pass BearerToken via Authorization header
    },
    body: JSON.stringify({
        search_code : "{{ url('') }}/ABC123",
        selectDays: 90  // 7, 30, 90 days
    })
.then(res => res.json())
.then(console.log);</code></pre>
    <button type="button" @click="output = '4'"  class="btn bg-primary border border-primary rounded-md text-white transition-all duration-300 hover:bg-primary/[0.85] hover:border-primary/[0.85]">Show Output</button>

    <div x-show="output === '4'">
                        <pre><code class="language-js">{
    "totalClicksPorDia": {
        "total_clicks": 3
    },
    "objClicksPorDia": {
        "labels": [
            "2024-11-15",
            "2024-12-03"
        ],
        "data": [
            1,
            2
        ]
    },
    "objClicksPorDispositivo": {
        "labels": [
            "desktop"
        ],
        "data": [
            3
        ]
    },
    "objClicksPorPais": {
        "labels": [
            "Italy"
        ],
        "data": [
            3
        ]
    }
}</code></pre>
    </div>
</div>
