import DS from 'ember-data';

export default DS.RESTAdapter.extend({

  headers: {
    'X-CSRF-Token': Ember.$('meta[name="csrf-token"]').attr('content')
  },

  namespace: 'api'

});
