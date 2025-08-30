jQuery(function ($) {
    let frame;
  
    function setPreview(id) {
      if (!id) {
        $('#ct_logo_preview').hide().attr('src', '');
        $('#ct_logo_remove').hide();
        return;
      }
      wp.media.attachment(id).fetch().then(function () {
        const url = wp.media.attachment(id).get('url');
        $('#ct_logo_preview').attr('src', url).show();
        $('#ct_logo_remove').show();
      });
    }
  
    $('#ct_logo_select').on('click', function (e) {
      e.preventDefault();
  
      // Reuse the frame
      if (frame) {
        frame.open();
        return;
      }
  
      frame = wp.media({
        title: 'Select Logo',
        button: { text: 'Use this image' },
        library: { type: 'image' },
        multiple: false
      });
  
      frame.on('select', function () {
        const attachment = frame.state().get('selection').first().toJSON();
        $('#ct_logo_id').val(attachment.id);
        setPreview(attachment.id);
      });
  
      frame.open();
    });
  
    $('#ct_logo_remove').on('click', function (e) {
      e.preventDefault();
      $('#ct_logo_id').val('');
      setPreview(0);
    });
  
    // Initialize preview on load if there is an existing ID
    const existing = parseInt($('#ct_logo_id').val(), 10);
    if (existing) setPreview(existing);
  });
  