
    <!-- Sidebar -->
    <?php if(!is_front_page()):?>
            <aside class="col-md-4 blog-sidebar">
                <?php if(is_active_sidebar('sidebar')):?>
                    <?php dynamic_sidebar('sidebar')?>
                <?php endif;?>
            </aside><!-- /.blog-sidebar -->
            <?php endif;?>
        </div><!-- /.row -->

        </main><!-- /.container -->   

    <!-- Footer -->
   <footer class="blog-footer">
        <p>&copy;<?php echo Date('Y'); ?> - <?php bloginfo('name');?> <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <?php wp_footer();?>  <!--Dodaje admin bar na vrhu -->      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
</body>

</html>