@include('public.header')
@{{ msg }}
@include('public.page_footer')

<script>
    const app = new Vue({
        el: '#app',
        data() {
            return {
                msg: 'you yes'
            }
        }
    });
</script>
@include('public.footer')