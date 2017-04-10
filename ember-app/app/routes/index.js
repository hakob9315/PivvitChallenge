import Ember from 'ember';

export default Ember.Route.extend({

  model() {
    return Ember.RSVP.hash({
      offers: this.get('store').findAll('offer'),
      purchases: this.get('store').findAll('purchase')
    });
  }

});
