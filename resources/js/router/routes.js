import Home from '../pages/Home';
import Groups from '../pages/Groups';
import GroupList from '../pages/Groups/List';

import GroupDetail from '../pages/Groups/Detail';
import GroupForm from '../pages/Groups/Form';

export default [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/grupos',
    component: Groups,
    children: [
      {
        path: '',
        name: 'Groups',
        component: GroupList
      },
      {
        path: 'crear',
        name: 'GroupCreate',
        component: GroupForm
      }
    ]
  },
  {
    path: '/grupo/:groupId',
    name: 'GroupDetail',
    component: GroupDetail,
    children: [
      {
        path: 'editar',
        name: 'GroupEdit',
        component: GroupForm,
        props: true
      }
    ]
  }
  // {
  //   path: '*',
  //   component: NotFound
  // }
];
