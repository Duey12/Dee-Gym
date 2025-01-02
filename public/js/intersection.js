const card_faders=document.querySelectorAll('.offer-card');
const fades=document.querySelectorAll('.fade-in');
let show_card_options={
  threshold:0.5
};
let show_options={
    threshold:0.5

};

const card_observer=new IntersectionObserver((entries,card_observer)=>{
  entries.forEach((entry)=>{
    if(entry.isIntersecting){
        entry.target.classList.add('card-visible');
        card_observer.unobserve(entry.target);
        return;
    }
    return;
  })
},show_card_options);
card_faders.forEach((card_fader)=>{
  card_observer.observe(card_fader);
});
const observer=new IntersectionObserver((entries1,observer)=>{
    entries1.forEach((entry1)=>{
      if(entry1.isIntersecting){
        alert(true)
          if(entry1.target.classList.contains('word-left')){
            entry1.target.classList.add('word-normal');
          }
          observer.unobserve(entry.target);
          return;
      }
      return;
    })
  },show_options);
  fades.forEach((fader)=>{
    observer.observe(fader);
  });